$(document).ready(function () {
    // console.log('hello js')
    const navLinkList = document.querySelectorAll('.navbar .nav-link');
    // console.log('navLinkList', navLinkList)

    const navbar = document.getElementById('navbar')
    // console.log('navbar', navbar)

    const scrollReport = document.getElementById('scrollReport')
    // console.log('scrollReport', scrollReport)


    const navigationTable = {};
    //透過forEach取出navLinkList 所有的dom
    navLinkList.forEach(value => {
        //forEach抓到4個dom(抓到4個nav-link)
        // console.log('value',value)

        const sectionID = value.dataset.target;

        navigationTable[sectionID] = {
            link: value,
            section: document.getElementById(sectionID)
        }
    });
    console.log('navigationTable', navigationTable);//抓出section1 2 3 4

    window.addEventListener('scroll', function () {

        //Math.round()四捨五入
        const y = Math.round(window.scrollY + navbar.offsetHeight);

        // console.log(y)

        scrollReport.innerText = `目前所在的位置${y}`;


        for (const key in navigationTable) {
            //  console.log('navigationTable[key]', navigationTable[key]);

            const link = navigationTable[key].link;
            // console.log('link', link);

            const section = navigationTable[key].section;
            // console.log('section', section);

            const top = section.offsetTop//offset抓出變數section頂部的數值
            // console.log('top', top)//336 2344 4352 6360

            const bottom = top + section.offsetHeight
            //offsetHeight可以抓出該元素的總高度，所以加上offsetTop所算出的位置就會等於底部的高度
            // console.log('bottom', bottom)


            //當滾動到某個數值內 add css效果進去沒有的話就remove css效果
            if (y > top && y < bottom) {
                link.classList.add('text-warning')
                section.classList.add('is-active')
            } else {
                link.classList.remove('text-warning')
                section.classList.remove('is-active')
            }
        }

    });



});