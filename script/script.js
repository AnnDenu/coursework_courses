// .itc-slider – селектор для выбора элемента, который нужно активировать как ItcSlider
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.slider').forEach((el)=>{
        ItcSlider.getOrCreateInstance(el);
    })
})
ItcSlider.getOrCreateInstance('.itc-slider',{
    loop: false, // без зацикливания
    swipe: false // без свайпа
});