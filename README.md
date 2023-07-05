# mediawiki-extensions-GoogleTranslator
Repository for customization of Google Translator extension

You enable the extension by adding this:

```
require_once "$IP/extensions/GoogleTranslator/GoogleTranslator.php";
$wgGoogleTranslatorOriginal  = 'ca'; // Original language of the wiki          
$wgGoogleTranslatorLanguages  = 'es,en,fr'; // Offered translation languages
$wgGoogleTranslatorIdPlacement = 'p-translation' // Id used for placing the widget
```

You can choose to further customize the style of the resulting widget placing some styles in ``MediaWiki:Common.css`` page for instance
