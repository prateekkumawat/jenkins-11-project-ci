variable "aws_region" {}
variable "aws_cidr_block" {}
variable "env" {}
variable "app_name" {}
variable "subnet_details" {
    type = list(object({
        cidr_block = string
        availability_zone = string
  }))
}
