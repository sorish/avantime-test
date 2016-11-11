http_path 	= "/"
css_dir 	= "css"
sass_dir 	= "scss"
images_dir 	= "img"
javascripts_dir = "js"
output_style = :compact
environment  = :compressed
require 'fileutils'
on_stylesheet_saved do |file|
  if File.exists?(file) && File.basename(file) == "style.css"
    puts "Moving: #{file}"
    FileUtils.mv(file, File.dirname(file) + "/../../" + File.basename(file))
  end
end