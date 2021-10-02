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
    <div className="relative">
      <img src={props.imageUrl} alt="Kid reading book under a tree" />
      <p className="absolute top-2/3 py-3 text-white text-center bg-gray-600 w-full text-2xl font-bold">
        {props.title}
      </p>
    </div>
  );
}
