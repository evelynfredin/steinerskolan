import { registerBlockType } from "@wordpress/blocks";

import { MediaUpload, PlainText, RichText } from "@wordpress/block-editor";
import { Button, ToggleControl } from "@wordpress/components";
import "./style.scss";

import Edit from "./edit";
import save from "./save";

registerBlockType("create-block/image-cover-block", {
	title: "Image Cover Block",
	icon: "smiley",
	category: "common",
	attributes: {
		title: {
			type: "string",
		},
		image: {
			type: "string",
		},
		body: {
			type: "string",
		},
		visible: false,
	},
	edit({ attributes, setAttributes }) {
		const { title, image, body } = attributes;

		function updateTitle(newTitle) {
			setAttributes({ title: newTitle });
		}
		function updateBody(newBody) {
			setAttributes({ body: newBody });
		}
		function updateImage(newImage) {
			setAttributes({ image: newImage.sizes.full.url });
		}

		function getImageButton(openEvent) {
			if (image) {
				return <img className="thumbnail" src={image} onClick={openEvent} />;
			} else {
				return (
					<div>
						<Button onClick={openEvent}>Pick an image</Button>
					</div>
				);
			}
		}

		return (
			<div className="center">
				<div className="">
					<MediaUpload
						onSelect={updateImage}
						type="image"
						value={attributes.imageID}
						render={({ open }) => getImageButton(open)}
					/>
					<PlainText
						className="waldorf"
						placeholder="Add your title"
						value={title}
						onChange={updateTitle}
					/>
				</div>

				<RichText
					className="body"
					placeholder="Add your description"
					tagName="p"
					value={body}
					onChange={updateBody}
				/>
			</div>
		);
	},

	save({ attributes }) {
		const { title, image, body, visible } = attributes;

		return (
			<main className="main">
				<div className="container">
					<div className="thumbnail">
						<img src={image} />
						<h2 className="title waldorf">{title}</h2>

						<svg
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							className="arrow"
							stroke="currentColor"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M19 9l-7 7-7-7"
							/>
						</svg>
					</div>
					<div className={` body-container ${visible ? "block" : "hidden"}`}>
						<RichText.Content className="body" tagName="p" value={body} />
					</div>
				</div>
			</main>
		);
	},
});
