#' @title 
#' Creation of the 'defi2' dataset
#' 
#' @description 
#' The function \code{make_defi2} creates the \code{\link[sdo]{defi2}} 
#' dataset from the file \code{Defi2_IndicCle_Eurostat.xlsx} downloaded 
#' \href{https://}{here}. 
#' 
#' @param path
#' character. Data once created are saved in the folder 
#' \code{file.path(path, "data")}. 
#' 
#' @param save_it 
#' logical. If \code{TRUE}, the result is saved as an \code{.RData} file in the 
#' folder \code{file.path(path, "data")}. 
#' 
#' @return 
#' Returns invisibly the tibble created. 
#' 
#' @seealso
#' \code{\link[sdo]{defi2}}
#' 
#' @import dplyr
#' @import readxl
#' @import tidyr
#' @importFrom foreach foreach %do%
#' @export
#' 
#' @examples 
#' \dontrun{
#' dir.create("data-raw")
#' make_defi2(save_it = TRUE)
#' }
#' 
make_defi2 <- 
function(path = ".", #system.file(package = 'sdo')
         save_it = FALSE)
{
  info <- readxl::read_excel(file.path(path, "data-raw", "Defi2_IndicCle_Eurostat.xlsx"), 
                             sheet = 1)
  
  i <- 3
  defi2 <- foreach::foreach(i = 3:12, .combine = "rbind") %do% {
    df <- readxl::read_excel(file.path(path, "data-raw", "Defi2_IndicCle_Eurostat.xlsx"), 
                       sheet = i, 
                       na = ":") %>% 
      dplyr::select("Area", starts_with("19"), starts_with("20")) %>% 
      tidyr::gather("Year", "Value", c(starts_with("19"), starts_with("20"))) %>% 
      dplyr::mutate(Index = info[["Acronym"]][i-2])
  }
  
  defi2 <- defi2 %>% 
    tidyr::spread("Index", "Value")
  
  if (save_it) {
    save(defi2, 
         file = file.path(path, "data", "defi2.RData"), 
         compress = "xz")
  }
  
  invisible(defi2)
}
