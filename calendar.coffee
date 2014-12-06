g = this
$(->
  g.today = moment()
  
  if QueryString.year
    g.today = g.today.year((QueryString.year))

  if QueryString.month
    g.today = g.today.month((QueryString.month - 1))

  draw()

  $('#next').click(->
    g.today = g.today.add(1, 'M')
    draw()
  )

  $('#prev').click(->
    if g.today.format('YYMM') is '1501' then window.location = 'dec2014.php'
    g.today = g.today.subtract(1, 'M')
    draw()
  )
)

draw = ->
  $('.first:gt(0)').remove()
  eom = g.today.date(1).add(1, 'M').subtract(1, 'd')
  $('#month').html(g.today.format('MMMM'))  
  $('#year').html(g.today.format('YYYY'))  

  for i in [1..eom.date()]
    do (i) ->
      row = $('.first:eq(0)').clone()
      row.find('td').html('')
      row.show()

      d = g.today.date(i)
      day = ((i-1) % 7) + 1


      if d.day() is 0 or i is 1
        $('#calendar').append(row)

      s = switch d.day()
        when 3 then i + "<p><a href='results/#{d.format('YYMMDD') + 'E.htm'}'>Results</a></p>"
        when 4 then i + "<p><a href='results/#{d.format('YYMMDD') + 'A.htm'}'>Results</a></p>"
        when 5 then i + "<p><a href='results/#{d.format('YYMMDD') + 'M.htm'}'>Results</a></p>"
        else i


      $('#calendar tr:last').find("td:eq(#{d.day()})").html(s)
