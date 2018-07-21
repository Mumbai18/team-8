package com.cfg.annadhan;
public class donor_model {


        private String status;
        private int rid;
        private long date;

        public donor_model(int rid , long  date, String status) {
            this.rid = rid;
            this.date = date;
            this.status = status;

        }

    public String getStatus() {
        return status;
    }

    public int getRid() {
        return rid;
    }

    public long getDate() {
        return date;
    }
}
