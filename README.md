Statamic slabext Plugin
=======================

The slabText plugin enables you to predefine the word combinations used when
slabtexting a headline.

## Installing
Download the php file and add it to a folder named `slabtext`, itself resident
within the `/_add-ons/` folder.

**Example Tag:**

    {{ slabtext title="{{ title }}" }}
    
**Example Template Use:**

    <h2><a href="{{ url }}">{{ slabtext title="{{ title }}" }}</a></h2>

## Parameters

### Delimiter `delim`
**Default:** |

The delimiter to use when splitting the text

    delim="^"
    
## Notes

Remember to actually add the `slabtext.js` file to your template and call the
`$.slabText` method to initiate the script as described in
[the demo page](http://www.frequency-decoder.com/demo/slabText/).