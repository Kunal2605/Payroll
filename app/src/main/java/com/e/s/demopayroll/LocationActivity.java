package com.e.s.demopayroll;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import com.google.android.gms.location.places.ui.PlacePicker;

public class LocationActivity extends AppCompatActivity {

    Button buttonLoction;
    TextView text;
    int PLACE_PICKER_REQUEST = 1;

    private PlacePicker.IntentBuilder builder;
    private String TAG;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        builder = new PlacePicker.IntentBuilder();


        buttonLoction = (Button) findViewById(R.id.location);
        text = (TextView) findViewById(R.id.text);


        buttonLoction.setOnClickListener(new View.OnClickListener() {


            @Override
            public void onClick(View v) {


            }
        });
    }



};