#run in RStudio
library(rvest)
library(dplyr)

link = "https://www.pro-football-reference.com/years/2021/games.htm"
page = read_html(link)

week = page %>% html_nodes("th.right") %>% html_text()

day = page %>% html_nodes("th.right+ .left") %>% html_text()

date = page %>% html_nodes(".left+ .left") %>% html_text()

#time detects unintended final element
time = page %>% html_nodes(".right:nth-child(4)") %>% html_text()
time = time[-length(time)] #removes unintended final element

away = page %>% html_nodes(".left:nth-child(5) a") %>% html_text()

home = page %>% html_nodes(".left:nth-child(7) a") %>% html_text()

schedule = data.frame(week, day, date, time, away, home, stringsAsFactors = FALSE)

write.csv(schedule, "nfl-schedule-2021.csv")