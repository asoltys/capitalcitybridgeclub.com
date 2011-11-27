#!/usr/bin/env ruby

(1..12).each do |i|
  (1..31).each do |j|
    `cp blank.txt #{"12%02d%02d.txt" % [i, j]}`   
  end
end
