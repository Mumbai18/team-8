package com.cfg.annadhan;

import android.content.Context;
import android.graphics.drawable.GradientDrawable;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import java.text.DecimalFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Objects;

class donarAdapter extends ArrayAdapter{


    public donarAdapter(@NonNull Context context, int resource, @NonNull List<donor_model> objects) {
        super(context,0,objects);
    }

    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
        View listView = convertView;
        if (listView == null) {
            listView = LayoutInflater.from(getContext()).inflate(R.layout.donar_activity_layout,parent,false);

        }

        donor_model currentRequest = (donor_model) getItem(position);

        TextView rid = listView.findViewById(R.id.rid);
        TextView date = listView.findViewById(R.id.date);
        TextView status = listView.findViewById(R.id.status);

        String rid_string = String.valueOf(currentRequest.getRid());
        String date_string = String.valueOf(currentRequest.getRid());
        String status_string = String.valueOf(currentRequest.getRid());

        rid.setText(rid_string);
        date.setText(date_string);
        status.setText(status_string);


        return listView;
    }
}
