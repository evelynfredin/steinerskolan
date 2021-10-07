import { RichText } from "@wordpress/block-editor";

wp.blocks.registerBlockType("yrgonautblocks/quick-icons", {
  title: "Quick Icons",
  icon: "smiley",
  category: "common",
  attributes: {
    path: { type: "string" },
    text: { type: "string" },
  },
  edit: EditComponent,
  save: function (props) {
    return null;
  },
});

function EditComponent(props) {
  function updatePath(value) {
    props.setAttributes({ path: value });
  }

  function updateText(value) {
    props.setAttributes({ text: value });
  }

  return (
    <section className="flex justify-between">
      <div>
        <img
          src="http://localhost:8000/uploads/2021/10/location.svg"
          alt="Hitta hit"
        />
        <p>Hitta hit</p>
      </div>
      <div>
        <img
          src="http://localhost:8000/uploads/2021/10/calendar.svg"
          alt="Kalendarium"
        />
        <p>Kalendarium</p>
      </div>
      <div>
        <img
          src="http://localhost:8000/uploads/2021/10/idunsoft.svg"
          alt="Idunsoft"
        />
        <p>Idunsoft</p>
      </div>
    </section>
  );
}
