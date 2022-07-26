/**
 *  Block for Custom Banners. To be used primarily in the 'Places' CPT section.  
 *
 */
import apiFetch from "@wordpress/api-fetch"
import { Button, PanelBody, PanelRow } from "@wordpress/components";
import { InnerBlocks, InspectorControls, MediaUpload, MediaUploadCheck } from "@wordpress/block-editor"
import { registerBlockType } from "@wordpress/blocks"
import { useEffect } from "@wordpress/element"

wp.blocks.registerBlockType("ucblocktheme/banner", {
    title: "Banner",
    supports: {
        align: ["full"]
    },
    attributes: {
        align: { type: "string", default: "full" },
        imgID: { type: "number" },
        imgURL: { type: "string" }
    },
    edit: EditComponent,
    save: SaveComponent
});

function EditComponent(props) {

    useEffect(function () {
        async function go() {
            const response = await apiFetch({
                path: `/wp/v2/media/${props.attributes.imgID}`,
                method: "GET"
            })
            props.setAttributes({ imgURL: response.media_details.sizes.large.source_url })
        }
        go()
    }, [props.attributes.imgID])

    function onFileSelect(x) {
        console.log(x);
        props.setAttributes({ imgID: x.id })
    }

    return (
        <>
            <InspectorControls>
                <PanelBody title="Background" initialOpen={true}>
                    <PanelRow>
                        <MediaUploadCheck>
                            <MediaUpload
                                onSelect={onFileSelect}
                                value={props.attributes.imgID}
                                render={({ open }) => {
                                    return (<Button onClick={open}>
                                        Choose Image
                                    </Button>
                                    )
                                }}
                            />
                        </MediaUploadCheck>
                    </PanelRow>
                </PanelBody>
            </InspectorControls>
            <div className="banner-image">
                <figure className="banner-image__bg-image" style={{
                    backgroundImage: `url('${props.attributes.imgURL}')`,
                    backgroundSize: "cover",
                    width: "100%",
                    height: "50rem"
                }}>
                </figure>
                <div className="page-banner__content container">
                    <InnerBlocks allowedBlocks={"ucblocktheme/genericheading"} />
                </div>
            </div>
        </>
    )
}

function SaveComponent() {
    return (
        <InnerBlocks.Content />

    )
}