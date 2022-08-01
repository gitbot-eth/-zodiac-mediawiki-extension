# Zodiac Mediawiki Extension
*The extension is only tested on MediaWiki version 1.37.*
**Features:**

- Adds a field for an ethereum address under the user profile preferences.


## Activating the extension in a MediaWiki instance
1. **Get the extension:** 
Clone this repo into the MediaWiki's `extensions` directory: 
```
cd extensions
git clone https://github.com/gnosis/zodiac-mediawiki-extension.git ZodiacExtension
```

2. **Activate the extension:** 
In the `LocalSettings.php` file (located at the root of the MediaWiki directory):
   1. Add `wfLoadExtension('ZodiacExtension');`

For instructions on how to set up a MediaWiki instance for development, see: https://github.com/gnosis/zodiac-mediawiki-skin#setting-up-a-general-mediawiki-development-environment
