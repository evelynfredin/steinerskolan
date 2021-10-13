import { MediaUpload, PlainText } from "@wordpress/block-editor";
import { Button } from "@wordpress/components";

wp.blocks.registerBlockType("yrgonautblocks/impact-image", {
  title: "Impact Image",
  icon: "smiley",
  category: "common",
  attributes: {
    imageUrl: {
      attributes: "src",
    },
    imageAlt: {
      attributes: "alt",
    },
    title: {
      type: "string",
    },
    path: {
      type: "url",
    },
  },
  edit: EditComponent,
  save: function (props) {
    return null;
  },
});

function EditComponent({ attributes, setAttributes }) {
  const getImageButton = (openEvent) => {
    if (attributes.imageUrl) {
      return <img src={attributes.imageUrl} onClick={openEvent} />;
    } else {
      return (
        <div>
          <Button onClick={openEvent}>Pick an image</Button>
        </div>
      );
    }
  };

  return (
    <div className="relative">
      <MediaUpload
        onSelect={(media) => {
          setAttributes({
            imageAlt: media.alt,
            imageUrl: media.url,
          });
        }}
        type="image"
        value={attributes.imageID}
        render={({ open }) => getImageButton(open)}
      />
      <PlainText
        onChange={(content) => setAttributes({ title: content })}
        value={attributes.title}
        tagName="h2"
        placeholder="Your card title"
        className="absolute top-2/3 py-3 text-white text-center bg-gray-600 w-full text-2xl font-bold"
      />
      <PlainText
        onChange={(hyperLink) => setAttributes({ path: hyperLink })}
        value={attributes.path}
        tagName="h2"
        placeholder="Add a link to your card"
        className="absolute top-2/3 py-3 text-white text-center bg-gray-600 w-full text-2xl font-bold"
      />
    </div>
  );
}
