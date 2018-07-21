package com.cfg.annadhan;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.widget.Adapter;
import android.widget.ArrayAdapter;
import android.widget.ListView;

import java.util.ArrayList;

public class Donor_activity extends AppCompatActivity {


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_donor_activity);

        ListView donorListView = (ListView) findViewById(R.id.list_view);


        donarAdapter mAdapter =  new donarAdapter(this, 0, new ArrayList<donor_model>());

        // Set the adapter on the {@link ListView}
        // so the list can be populated in the user interface
        donorListView.setAdapter(mAdapter);




    }
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        MenuInflater inflater = getMenuInflater();
        inflater.inflate(R.menu.donor_option_item, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {

        switch (item.getItemId())
        {
            case R.id.new_request:

                return true;
            case R.id.add_needy:
                return true;
            default:
                return super.onOptionsItemSelected(item);
        }

    }
}
