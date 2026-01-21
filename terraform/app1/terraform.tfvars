aws_cidr_block = "10.0.0.0/16"
aws_region = "ap-south-1"
app_name = "autmation"
env = "stage"
subnet_details = [ {
     cidr_block = "10.0.1.0/24"
     availability_zone = "ap-south-1a"
    }, 
    {
     cidr_block = "10.0.2.0/24"
     availability_zone = "ap-south-1b"   
    }
    ]