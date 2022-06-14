/**
 *  Block for Custom Banners. To be used primarily in the 'Places' CPT section.  
 *
 */
import { registerBlockType } from "@wordpress/blocks"

wp.blocks.registerBlockType("ucblocktheme/banner", {
    title: "Banner",
    edit: EditComponent,
    save: SaveComponent
});

function EditComponent() {
    return (
        <figure className="banner-image">
            <h1>Places Page</h1>
            <h3>Some subtitle</h3>
            <img />
        </figure>
    )
}

function SaveComponent() {
    return <p>This is from SaveComponent in Banner Block</p>
}