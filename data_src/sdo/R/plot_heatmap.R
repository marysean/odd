
#' @import ggplot2
#' @importFrom ggthemes theme_few
#' @importFrom viridis scale_fill_viridis
#' @export
#' 
plot_heatmap <- 
function(.data, 
         x,    # "Year"
         y,    # "Area"
         fill, # "Value"
         facet = NULL,# "Var"
         title = "", 
         raster = TRUE, # raster or tile
         viridis = FALSE)
{
  # put a stop if .data is too big

  g = ggplot(.data, aes_string(x = x, y = y))
  
  if (raster) {
    g = g + 
      geom_raster(aes_string(fill = fill)) #+ 
      #geom_hline(aes_string(yintercept="y"), color = "white", size = 0.1)
    
  } else {
    g = g + 
      geom_tile(aes_string(fill = fill), color = "white", size = 0.1)
  }
  
  g = g + 
    #scale_x_discrete(labels = time_formatter) + 
    labs(x = NULL, y = NULL, title = title) + 
    ggthemes::theme_few() + 
    theme(axis.text.x = element_text(angle = 90, size = 5, hjust = 1), 
          axis.text.y = element_text(size = 5))

  if (viridis) {
    g = g + 
      viridis::scale_fill_viridis()
  } else {
    g = g + 
      scale_fill_continuous()
  }
  #name = "%") + #scale_fill_viridis
  
  if (!is.null(facet)) {
    g = g + 
      facet_wrap(facet, ncol = 1, scales = "free_x")
  }
  g
}
