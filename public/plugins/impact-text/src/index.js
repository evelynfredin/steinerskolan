import "./index.scss";
import { TextControl } from "@wordpress/components";

wp.blocks.registerBlockType("yrgonautblocks/impact-text", {
  title: "Impact Text",
  icon: "smiley",
  category: "common",
  attributes: {
    showImpactText: { type: "string" },
  },
  edit: EditComponent,
  save: function (props) {
    return null;
  },
});

function EditComponent(props) {
  function updateImpactText(value) {
    props.setAttributes({ showImpactText: value });
  }

  return (
    <div className="impactful">
      <TextControl
        label="Write something impactful!"
        value={props.attributes.showImpactText}
        onChange={updateImpactText}
      />
    </div>
  );
}
