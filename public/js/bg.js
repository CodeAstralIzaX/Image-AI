window.addEventListener('DOMContentLoaded', (event) => {
    init()
})

const init = () => {
    console.log('DOM Content Loaded')
    
    document.addEventListener('mousemove', (e) => {
        const items = document.querySelectorAll('.c-parrallax--item')
        items.forEach((item, index) => {
            const speed = item.getAttribute('data-speed')

            const scale = 0.015

            const x = -(window.innerWidth - e.pageX * speed) * scale
            const y = -(window.innerHeight - e.pageY * speed) * scale

            item.style.transform = `translateX(${x}px) translateY(${y}px)`
            console.log(`translateX(${x}px) translateY(${y}px)`)
        })
    })

}