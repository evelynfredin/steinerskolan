import { RichText } from "@wordpress/block-editor";

wp.blocks.registerBlockType("yrgonautblocks/food-block", {
  title: "Food Block",
  icon: "smiley",
  category: "common",
  edit: EditComponent,
  save: function (props) {
    return null;
  },
});

function EditComponent(props) {
  return (
    <section className="flex justify-between">
      <p>Sorry, this is hardcoded, no time to do more :P</p>
    </section>
  );
}
