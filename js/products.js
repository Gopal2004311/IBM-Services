let chx = document.getElementById('productChart1').getContext('2d')
let chart = new Chart(chx, {
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
        data: [3, 6, 5, 5, 7, 6, 6],
        label: 'Company Growth in %',
        backgroundColor: [
          '#18435f',
          '#18435f',
          '#18435f',
          '#18435f',
          '#18435f',
          '#18435f',
          '#18435f'
        ]
      }
    ]
  }
})
