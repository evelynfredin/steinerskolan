import { registerBlockType } from "@wordpress/blocks";

import { MediaUpload, PlainText, RichText } from "@wordpress/block-editor";
import { Button } from "@wordpress/components";
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
		visible: {
			default: false,
		},
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

		function updateVisibility(visibility) {
			if (visibility === true) {
				setAttributes({ visible: false });
			} else setAttributes({ visible: true });
		}

		function getImageButton(openEvent) {
			if (image) {
				return <img src={image} onClick={openEvent} />;
			} else {
				return (
					<div>
						<Button onClick={openEvent}>Pick an image</Button>
					</div>
				);
			}
		}

		return (
			<div>
				<div
					class=""
					style={{
						backgroundImage: `url(${image})`,
						backgroundSize: "cover",
						backgroundPosition: "center",
						backgroundRepeat: "no-repeat",
					}}
				>
					<MediaUpload
						onSelect={updateImage}
						type="image"
						value={attributes.imageID}
						render={({ open }) => getImageButton(open)}
					/>
					<PlainText
						placeholder="Add your title"
						value={title}
						onChange={updateTitle}
					/>
				</div>

				<RichText
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
			<div className="m-h-[256px] flex w-full m-w-[375px] flex-wrap">
				<div
					className=" h-[256px] w-full flex justify-center items-center relative "
					style={{
						backgroundImage: `url(${image})`,
						backgroundSize: "cover",
						backgroundPosition: "center",
						backgroundRepeat: "no-repeat",
					}}
				>
					<h2 className="waldorf text-schoolGreen text-4xl">{title}</h2>
					<svg
						onClick={updateVisibility}
						xmlns="http://www.w3.org/2000/svg"
						style={{ left: "calc(50% - 6px)" }}
						className="h-12 w-12 text-schoolGreen stroke-current cursor-pointer animate-bounce hover:animate-none absolute"
						fill="none"
						viewBox="0 0 24 24"
						stroke="currentColor"
						id="chevron"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							d="M19 9l-7 7-7-7"
						/>
					</svg>
				</div>
				<RichText.Content
					className={visible ? "block" : "hidden"}
					tagName="p"
					value={body}
				/>
			</div>
		);
	},
});
