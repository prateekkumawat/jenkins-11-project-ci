resource "aws_vpc" "this1" {
  cidr_block = var.aws_cidr_block
    tags = {
        Name = "jenkins-terraform-manage-vpc-${var.env}-${var.app_name}"
    }
}

resource "aws_subnet" "this1" {
  count             = length(var.subnet_details)
  vpc_id            = aws_vpc.this1.id
  cidr_block        = var.subnet_details[count.index].cidr_block
  availability_zone = var.subnet_details[count.index].availability_zone

    tags = {
        Name = "jenkins-terraform-manage-subnet-${var.env}-${var.app_name}-${count.index + 1}"
    }
}
