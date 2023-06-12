class Table {
    private int tableNo;
    private Menu menuOrdered;
    private int orderTime;
    private Employee orderProgress;

    public Table(int tableNo) {
        this.tableNo = tableNo;
    }

    public void viewProgress() {
        if (orderProgress != null) {
            System.out.println("Order in progress by: " + orderProgress.getName());
        } else {
            System.out.println("No order in progress.");
        }
    }

    public String sendFeedback() {
        // implementation for sending feedback
        return "Thank you for your feedback!";
    }

    public String orderMenu(Menu menu) {
        this.menuOrdered = menu;
        this.orderTime = getCurrentTime(); // assume getCurrentTime() returns the current time
        this.orderProgress = null;
        return "Menu ordered successfully!";
    }

    public String cancelOrder() {
        this.menuOrdered = null;
        this.orderTime = 0;
        this.orderProgress = null;
        return "Order canceled successfully!";
    }
}
