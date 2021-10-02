import { RichText } from "@wordpress/block-editor";

wp.blocks.registerBlockType("yrgonautblocks/impact-text", {
  title: "Impact Text",
  icon: "smiley",
  category: "common",
  attributes: {
    showImpactText: { type: "string" },
  },
  description:
    "A simple text block ideal for short paragraphs that attract the eye.",
  example: {
    attributes: {
      showImpactText:
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet non purus sed blandit.",
    },
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
    <section class="py-32">
      <div class="px-10 md:px-0 md:w-3/6 mx-auto">
        <h3 class="text-center text-2xl impactText">
          <RichText
            value={props.attributes.showImpactText}
            onChange={updateImpactText}
          />
        </h3>
      </div>
    </section>
  );
}
