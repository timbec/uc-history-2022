wp.blocks.registerBlockType("ucblocktheme/postlistnews", {
    title: "News List",
    edit: function () {
        return wp.element.createElement("div", { className: "news-placeholder-block" }, "News List Placeholder")
    },
    save: function () {
        return null
    }
})