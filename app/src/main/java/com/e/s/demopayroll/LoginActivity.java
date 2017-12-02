package com.e.s.demopayroll;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.util.Config;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

import java.util.HashMap;

/**
 * Created by Kunnu on 11/30/2017.
 */

public class LoginActivity extends AppCompatActivity {
    EditText eid,pass;
    public static int id;
    public static String password;
    Button button;



    JSONParser jsonParser = new JSONParser();
    EditText inputName;
    EditText inputPrice;
    EditText inputDesc;

    // url to create new product
    private static String url_create_product = "https://api.androidhive.info/android_connect/create_product.php";


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        eid=(EditText)findViewById(R.id.id);
        pass=(EditText)findViewById(R.id.password);
        button=(Button)findViewById(R.id.btn);

        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                if (!isValidPass(pass))
                {
                    pass.setError("Minimum 6 characters");

                 if (!isValidPhone(eid))
                    {
                    id.setError("Phone is Required");
                }
                else
                {



                Intent intent=new Intent(LoginActivity.this,image.class);
                startActivity(intent);
            }
        });
    }
    private boolean isValidPass(EditText pass) {
        if (pass.length() != 0 && pass.length() >= 6) {
            return true;
        }
        return false;
    }

    private boolean isValidPhone(EditText id) {
        if (id.length() != 0 && id.length() <= 10) {
            return true;
        }
        return false;
    }

}
