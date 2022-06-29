wp.blocks.registerBlockType("ucblocktheme/postlistplaces", {
    title: "Places List",
    edit: function () {
        return wp.element.createElement("div", { className: "places-placeholder-block" }, "Places List Placeholder")
    },
    save: function () {
        return null
    }
})