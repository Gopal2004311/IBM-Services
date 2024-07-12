//contact form script start here

let formElements = document.querySelectorAll('.form-data')
let submitBtn = document.getElementById('submit')
let form1 = document.getElementById('contactForm')
let arr = new Array(3)
formElements.forEach(ele => {
  ele.addEventListener('input', e => {
    e.preventDefault()
    let data = new FormData()
    data.append(ele.id, ele.value)
    fetch('./partials/submit.php', {
      method: 'POST',
      header: {},
      body: data
    })
      .then(res => res.text())
      .then(d => {
        if (d.includes('Error')) {
          ele.nextElementSibling.innerHTML = d
          setTimeout(() => {
            ele.nextElementSibling.innerHTML = ''
          }, 3000)
          if (ele.id == 'name') arr[0] = 'error1'
          if (ele.id == 'email') arr[1] = 'error2'
          if (ele.id == 'desc') arr[2] = 'error3'
        } else {
          if (ele.id == 'name') arr[0] = ''
          if (ele.id == 'email') arr[1] = ''
          if (ele.id == 'desc') arr[2] = ''
        }

        if (arr[0] == '' && arr[1] == '' && arr[2] == '') {
          submitBtn.removeAttribute('disabled')
        } else {
          submitBtn.setAttribute('disabled', true)
        }
      })
  })
})

//submitting form data
let result = document.getElementById('result-message')
submitBtn.addEventListener('click', e => {
  e.preventDefault()
  let formData = new FormData(form1)
  formData.append('submit', 'data')
  if (
    formElements[0].value == '' ||
    formElements[1].value == '' ||
    formElements[2].value == ''
  ) {
    formElements[0].focus()
  } else {
    let p = {
      method: 'POST',
      header: {},
      body: formData
    }

    fetch('./partials/submit.php', p)
      .then(res => res.text())
      .then(d => {
        if (d.includes('Success') || d.includes('Error')) {
          result.classList.remove('d-none')
          result.innerHTML = d
          if (d.includes('Success')) {
            result.classList.add('alert-success')
          } else {
            result.classList.add('alert-danger')
          }
          setTimeout(() => {
            result.classList.add('d-none')
            result.innerHTML = ''
          }, 4000)

          if (d.includes('Success')) {
            form1.reset()
          }
          submitBtn.setAttribute('disabled', true)
        }
      })
  }
})

/*IBM, or International Business Machines Corporation, has a rich history dating back over a century. Here are some key milestones and developments in its history:

### Early Years (1911-1930s)
- **1911:** IBM was founded as the Computing-Tabulating-Recording Company (CTR) through a merger of three companies: the Tabulating Machine Company, the International Time Recording Company, and the Computing Scale Company.
- **1924:** CTR was renamed International Business Machines Corporation (IBM).
- **1930s:** IBM introduced the first electric accounting machine and was a major supplier of punch card equipment used in government and business data processing.

### Mid-20th Century (1940s-1960s)
- **1944:** IBM collaborated with Harvard University to develop the Mark I, the first programmable digital computer in the United States.
- **1952:** Thomas J. Watson Jr. became the president of IBM, leading to significant growth and innovation.
- **1956:** IBM introduced the IBM 305 RAMAC, the first computer with a hard disk drive.
- **1964:** The IBM System/360 was launched, a revolutionary mainframe computer system that standardized hardware and software across different models, making it easier for businesses to upgrade systems.

### Growth and Innovation (1970s-1990s)
- **1971:** IBM introduced the floppy disk, which became a standard for data storage.
- **1981:** IBM launched its first personal computer, the IBM PC, which set standards for the PC industry.
- **1980s:** IBM experienced fierce competition from other technology companies but remained a major player in the computer industry.
- **1993:** Louis V. Gerstner Jr. became CEO and led a successful turnaround, shifting IBM's focus from hardware to software and services.

### Modern Era (2000s-Present)
- **2000s:** IBM continued to evolve, selling its PC division to Lenovo in 2005 and acquiring various software and services companies to strengthen its portfolio.
- **2011:** IBM celebrated its 100th anniversary and continued to focus on areas like cloud computing, data analytics, and artificial intelligence.
- **2014:** Ginni Rometty, IBM's CEO at the time, emphasized cognitive computing with the development of IBM Watson, a question-answering computer system capable of processing natural language.
- **2020:** IBM announced the spin-off of its managed infrastructure services unit into a new public company, Kyndryl, which was completed in 2021.
- **Present:** IBM continues to be a leader in hybrid cloud, AI, and quantum computing, driving innovation and helping businesses digitally transform.

IBM's ability to adapt and reinvent itself has allowed it to remain a major force in the technology industry for over a century.*/
