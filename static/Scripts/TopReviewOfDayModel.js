function TopReviewOfDayModel() {
    var self = this;

    // variable   
    self.Position = 0;
    self.Executing = false;
    self.OrgTotalItems = 0;
    self.IsInterval = true;

    // config
    self.ContainerId;
    self.BtnAnimationId;
    self.ItemWidth;
    self.TotalItems;
    self.DisplayItems;
    self.DelayTime;

    // function
    self.MoveForward = function (isMoveForward) {
        if (!self.Executing) {
            self.Executing = true;

            $("#" + self.ContainerId).animate({
                left: (isMoveForward ? "-=" : "+=") + self.ItemWidth + "px"
            }, {
                complete: function () {
                    if (isMoveForward) {
                        self.Position++;
                    }
                    else {
                        self.Position--;
                    }

                    if (self.Position == self.OrgTotalItems) {
                        $("#" + self.ContainerId).css("left", -(self.ItemWidth * self.OrgTotalItems));
                        self.Position = 0;
                    }

                    if (self.Position == -1) {
                        $("#" + self.ContainerId).css("left", -(self.ItemWidth * self.OrgTotalItems * 2));
                        self.Position = self.OrgTotalItems - 1;
                    }

                    self.Executing = false;
                }
            });
        }
    };

    self.RefreshContainerWidth = function () {
        $("#" + self.ContainerId).width(self.ItemWidth * self.TotalItems);
    };

    self.CloneFirstLastReview = function () {
        var html = $("#" + self.ContainerId).html();

        // insert last
        self.TotalItems += self.OrgTotalItems;
        self.RefreshContainerWidth();
        $("#" + self.ContainerId).prepend(html);

        // insert first
        self.TotalItems += self.OrgTotalItems;
        self.RefreshContainerWidth();
        $("#" + self.ContainerId).append(html);

        // set pos
        $("#" + self.ContainerId).css("left", -(self.ItemWidth * self.OrgTotalItems));
    };

    self.Init = function (opts) {
        self.ContainerId = opts.containerId;
        self.BtnAnimationId = opts.btnAnimationId;
        self.ItemWidth = opts.itemWidth;
        self.TotalItems = opts.totalItems;
        self.OrgTotalItems = opts.totalItems;
        self.DelayTime = (opts.delayTime != null) ? opts.delayTime : 6000;

        $("#" + self.ContainerId).parent().parent().hover(function () {
            self.IsInterval = false;
        }, function () {
            self.IsInterval = true;
        });

        $("#" + self.BtnAnimationId + "-prev").click(function () {
            // self.IsInterval = false;
            self.MoveForward(false);
        });

        $("#" + self.BtnAnimationId + "-next").click(function () {
            // self.IsInterval = false;
            self.MoveForward(true);
        });

        self.CloneFirstLastReview();

        setInterval(
            function () {
                if (self.IsInterval) {
                    self.MoveForward(true);
                }
            }, self.DelayTime);
    };
}