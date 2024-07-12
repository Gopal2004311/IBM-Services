//evaluation page script start here
let chx = document.getElementById('chart').getContext('2d')
let chart = new Chart(chx, {
  type: 'pie',
  data: {
    labels: [
      '1991-1995',
      '1996-2000',
      '2001-2005',
      '2006-2010',
      '2011-2015',
      '2016-2020',
      '2021-2024'
    ],
    datasets: [
      {
        data: [265.4, 1018.47, 3372.39, 2902.08, 5432.65, 9144.07, 7056.89],
        label: 'IBM Share Market in %',
        backgroundColor: [
          '#dea124',
          'green',
          'blue',
          'yellow',
          'orange',
          'purple',
          'pink'
        ]
      }
    ]
  },

  options: {
    responsive: false,
    layout: {
      padding: {
        top: 50,
        left: 100,
        right: 100
      }
    },
    tooltips: {
      disabled: true,
      backgroundColor: 'red'
    },
    title: {
      display: true,
      text: 'Customer Chart Title'
    },
    legend: {
      position: 'bottom'
    },
    animation: {
      duration: 2000,
      easing: 'easeInOutBounce'
    }
  }
})

let chx1 = document.getElementById('chart1').getContext('2d')
let chart1 = new Chart(chx1, {
  type: 'line',
  data: {
    labels: [
      '1991-1995',
      '1996-2000',
      '2001-2005',
      '2006-2010',
      '2011-2015',
      '2016-2020',
      '2021-2024'
    ],
    datasets: [
      {
        data: [10, 20, 20, 15, 15, 20, 10],
        label: 'Brand Evolution in %',
        backgroundColor: [
          'red',
          'green',
          'blue',
          'yellow',
          'orange',
          'purple',
          'pink'
        ]
      }
    ]
  },

  options: {
    responsive: false,
    layout: {
      padding: {
        top: 50,
        left: 100,
        right: 100
      }
    },
    tooltips: {
      disabled: true,
      backgroundColor: 'red'
    },
    title: {
      display: true,
      text: 'Customer Chart Title'
    },
    legend: {
      position: 'bottom'
    },
    animation: {
      duration: 2000,
      easing: 'easeInOutBounce'
    }
  }
})

let chx2 = document.getElementById('chart2').getContext('2d')
let chart2 = new Chart(chx2, {
  type: 'bar',
  data: {
    labels: [
      '1991-1995',
      '1996-2000',
      '2001-2005',
      '2006-2010',
      '2011-2015',
      '2016-2020',
      '2021-2024'
    ],
    datasets: [
      {
        data: [15, 25, 20, 15, 15, 20, 10],
        label: 'Goodwill',
        backgroundColor: [
          'red',
          'green',
          'blue',
          'yellow',
          'orange',
          'purple',
          'pink'
        ]
      }
    ]
  },

  options: {
    responsive: false,
    layout: {
      padding: {
        top: 50,
        left: 100,
        right: 100
      }
    },
    tooltips: {
      disabled: true,
      backgroundColor: 'red'
    },
    title: {
      display: true,
      text: 'Customer Chart Title'
    },
    legend: {
      position: 'bottom'
    },
    animation: {
      duration: 2000,
      easing: 'easeInOutBounce'
    }
  }
})

let chx3 = document.getElementById('chart3').getContext('2d')
let chart3 = new Chart(chx3, {
  type: 'radar',
  data: {
    labels: [
      '1991-1995',
      '1996-2000',
      '2001-2005',
      '2006-2010',
      '2011-2015',
      '2016-2020',
      '2021-2024'
    ],
    datasets: [
      {
        data: [20, 25, 20, 15, 15, 20, 15],
        label: 'Product Demand in %',
        backgroundColor: [
          'red',
          'green',
          'blue',
          'yellow',
          'orange',
          'purple',
          'pink'
        ]
      }
    ]
  },

  options: {
    responsive: false,
    layout: {
      padding: {
        top: 50,
        left: 100,
        right: 100
      }
    },
    tooltips: {
      disabled: true,
      backgroundColor: 'red'
    },
    title: {
      display: true,
      text: 'Customer Chart Title'
    },
    legend: {
      position: 'bottom'
    },
    animation: {
      duration: 2000,
      easing: 'easeInOutBounce'
    }
  }
})

let container = document.getElementById('Employee-Opinions')
let pre = document.querySelector('#employee .previous')
let next = document.querySelector('#employee .next')

pre.addEventListener('click', e => {
  container.scrollBy({
    left: -200,
    behavior: 'smooth'
  })
})

next.addEventListener('click', e => {
  container.scrollBy({
    left: 200,
    behavior: 'smooth'
  })
})
