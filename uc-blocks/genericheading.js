/**
 * Import Wordpress dependencies
 * 
 */
import { RichText, BlockControls } from "@wordpress/block-editor"
import { registerBlockType } from "@wordpress/blocks"


registerBlockType("ucblocktheme/genericheading", {
    title: "Generic Heading",
    attributes: {
        text: { type: "string" },
        size: { type: "string", default: "large" }
    },
    EditComponent,
    SaveComponent
});


function EditComponent(props) {
    function handleTextChange(x) {
        props.setAttributes({ text: x })
    }

    return (
        <>
            <BlockControls>
                <RichText allowedFormats={["core/bold", "core/italic"]} tagName="h1" className={`headline headline--${props.attributes.size}`} value={props.attributes.text} onChange={handleTextChange} />
            </BlockControls>
        </>
    )
}

function SaveComponent() {
    return <RichText.Content value={props.attributes.text} className={`headline headline--${props.attributes.size}`} />
}