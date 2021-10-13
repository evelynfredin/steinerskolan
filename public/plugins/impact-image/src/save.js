import React from "react";
import ReactDOM from "react-dom";

const divsToUpdate = document.querySelectorAll(".impactImage");

divsToUpdate.forEach(function (div) {
  const data = JSON.parse(div.querySelector("pre").innerHTML);
  ReactDOM.render(<ImgBlock {...data} />, div);
  div.classList.remove("impactImage");
});

function ImgBlock(props) {
  return (
    <div className="relative flex justify-center w-full">
      <a
        href={props.path}
        aria-label={`Läs mer om ${props.title}`}
        title={`Läs mer om ${props.title}`}
      >
        <img src={props.imageUrl} alt={props.imageAlt} />
      </a>
      <div className="absolute -bottom-10 bg-secondaryBtn flex justify-center w-[267px] h-[64px]">
        <p className="py-3 text-softGreen waldorf text-center text-2xl font-bold">
          {props.title}
        </p>
      </div>
    </div>
  );
}
