import { Image } from "@wordpress/components"
import { registerBlockType } from "@wordpress/blocks"


registerBlockType("ucblocktheme/imagelightbox", {
    title: "Image Lightbox",
    attributes: {
        text: { type: string },
        image: { type: object }
    },
    edit: EditComponent,
    save: SaveComponent
})

function EditComponent() {
    return (
        <Image />
    )
}

function SaveComponent() {

}