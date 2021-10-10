#run in RStudio
library(rvest)
library(dplyr)

link = "https://www.pro-football-reference.com/years/2021/rushing.htm"
page = read_html(link)

name = page %>% html_nodes(".right+ .left a") %>% html_text()

team = page %>% html_nodes(".left+ td.left") %>% html_text()

#age detects unintended final element
age = page %>% html_nodes(".right:nth-child(4)") %>% html_text()
age = age[-length(age)] #removes unintended final element

games_played = page %>% html_nodes("td.right~ .left+ .right") %>% html_text()

rushing_attempts = page %>% html_nodes(".right:nth-child(8)") %>% html_text()

rushing_yards = page %>% html_nodes(".right:nth-child(9)") %>% html_text()

rushing_tds = page %>% html_nodes(".right:nth-child(10)") %>% html_text()

fumbles = page %>% html_nodes(".right:nth-child(15)") %>% html_text()

rushing_stats_2021 = data.frame(name, team, age, games_played, rushing_attempts, 
                                rushing_yards, rushing_tds, fumbles, 
                                stringsAsFactors = FALSE)

write.csv(rushing_stats_2021, "nfl-rushing-2021.csv")