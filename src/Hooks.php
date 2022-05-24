<?php
	namespace MediaWiki\Extension\ZodiacExtension;

	class Hooks {
		/**
		 * @param User $user
		 * @param array $preferences
		 */
		public static function onGetPreferences($user, &$preferences) {
			// A text field for Ethereum address
			$preferences['ethereumAddress'] = [
				'type' => 'text',
				'label-message' => 'mypref-ethereum-address',
				'section' => 'personal/info',
				'placeholder-message' => 'ethereum-address-placeholder',
				'help-message' => 'ethereum-address-or-ens',
			];
		}
	}
