const canvas = document.querySelector("canvas")
canvas.style.backgroundColor = '#fff';

const ctx = canvas.getContext("2d")

let prevX = null
let prevY = null

ctx.lineWidth = 1

let draw = false

let clrs = document.querySelectorAll(".color")
clrs = Array.from(clrs)
clrs.forEach(clr => {
    clr.addEventListener("click", () => {
        ctx.strokeStyle = clr.dataset.color
    })
});

// Saving drawing as image
let saveBtns = document.querySelectorAll(".save button")
saveBtns.forEach((v) => {
    v.addEventListener('click', (e) => {
        let data = canvas.toDataURL(`image/${e.target.dataset.format}`);
        console.log(data);
        let a = document.createElement("a")
        a.href = data
        a.download = "image." + e.target.dataset.format;
        a.click()
    });
});

window.addEventListener("mousedown", (e) => draw = true)
window.addEventListener("mouseup", (e) => draw = false)

window.addEventListener("mousemove", (e) => {
    if(prevX == null || prevY == null || !draw){
        prevX = e.clientX
        prevY = e.clientY
        return
    }

    let currentX = e.clientX
    let currentY = e.clientY

    ctx.beginPath()
    ctx.moveTo(prevX, prevY)
    ctx.lineTo(currentX, currentY)
    ctx.stroke()

    prevX = currentX
    prevY = currentY
})