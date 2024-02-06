const briefCircle = document.querySelector(".brief-circle")

briefCircle.onmouseleave = () => {
    briefCircle.classList.add("onCircleLeave")
    setTimeout(()=>{
        briefCircle.classList.remove("onCircleLeave")
    }, 1000)
}