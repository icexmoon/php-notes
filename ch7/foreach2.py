students = [("Li Lei", 20, "四年级", "3班", "swim"),
            ("Xiao Ming", 20, "六年级", "8班", "music"),
            ("Jack Chen", 10, "三年级", "2班", "draw")]
for name, *_, favorite in students:
    print("student(name:{:s}, favorite:{:s})".format(name, favorite))
# student(name:Li Lei, favorite:swim)
# student(name:Xiao Ming, favorite:music)
# student(name:Jack Chen, favorite:draw)
