wp.blocks.registerBlockType("ucblocktheme/postlistphotos", {
    title: "Photos List",
    edit: function () {
        return wp.element.createElement("div", { className: "photos-placeholder-block" }, "Photos List Placeholder")
    },
    save: function () {
        return null
    }
})