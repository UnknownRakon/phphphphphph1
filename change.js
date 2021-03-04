const button = document.getElementById('change');
const direction = document.getElementById('direction');

const flexDirections = [
`row-reverse`,
`column`,
`column-reverse`,
`row`
];
const directionsLength = flexDirections.length - 1;

let index = 0;


const change = () => {
direction.style.flexDirection = flexDirections[index];
index = (index + 1) > directionsLength ? 0 : index + 1;
};

button.addEventListener(`click`, change);