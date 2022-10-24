wp.blocks.registerBlockType("ucblocktheme/postlistwriting", {
    title: "Writing List",
    edit: function () {
        return wp.element.createElement("div", { className: "writing-placeholder-block" }, "Writing List Placeholder")
    },
    save: function () {
        return null
    }
})