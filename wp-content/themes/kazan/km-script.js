var $ = jQuery

$(function () {
  $(window).on('popstate', function () {
    location.reload()
  })

  $(window).on('load', function () {
    $('.loader').removeClass('active')
  })

  $('a').on('click', function (e) {
    let href = $(this).attr('href')

    if (href.includes(url.root) && !href.includes(url.admin)) {
      e.preventDefault()

      window.history.pushState({href: href}, '', href)

      $('.loader').addClass('active')
      $('body').load(href, '', function (result) {
        document.title = result.match(/<title>(.*)<\/title>/)[0].replace(/<title>|<\/title>/g, '')
        setTimeout(function () {
          window.scrollTo({
            left: 0,
            top: 0,
          })
          $('.loader').removeClass('active')
        }, 0)
      })
    }

  })
})