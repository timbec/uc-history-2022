import { InnerBlocks, InspectorControls, MediaUpload, MediaUploadCheck } from "@wordpress/block-editor"
import { registerBlockType } from "@wordpress/blocks"

wp.blocks.registerBlockType("ucblocktheme/slideshow", {
    title: "Slideshow",
    supports: {
        align: ["full"]
    },
    attributes: {
        align: { type: "string", default: "full" },
    },
    edit: EditComponent,
    save: SaveComponent
});

function EditComponent() {
    return (
        <div className="slideshow" style={{ backgroundColor: "transparent", padding: "35px" }}>
            <p style={{ textAlign: "center", fontSize: "20px", color: "#fff" }}>Slideshow</p>
            <InnerBlocks allowedBlocks={["ucblocktheme/slide"]} />
        </div>
    )
}

function SaveComponent() {
    //save nested slides
    return <InnerBlocks.Content />
}