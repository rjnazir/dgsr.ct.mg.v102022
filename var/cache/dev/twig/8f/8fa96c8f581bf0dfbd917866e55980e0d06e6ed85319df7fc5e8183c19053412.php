<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e98cafdec0d1acb5959fe8995fd54b5dd514993350554f06c573d6e8703eebe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc79adb6f9e6f3af98cbf5712aa598e5fbfff0c88a76868257784f5359922402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc79adb6f9e6f3af98cbf5712aa598e5fbfff0c88a76868257784f5359922402->enter($__internal_cc79adb6f9e6f3af98cbf5712aa598e5fbfff0c88a76868257784f5359922402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_feca7c88f04ccbab123e3bb7f03bf043ddc9087a675f5b4a71ae9890f1d39f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feca7c88f04ccbab123e3bb7f03bf043ddc9087a675f5b4a71ae9890f1d39f72->enter($__internal_feca7c88f04ccbab123e3bb7f03bf043ddc9087a675f5b4a71ae9890f1d39f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cc79adb6f9e6f3af98cbf5712aa598e5fbfff0c88a76868257784f5359922402->leave($__internal_cc79adb6f9e6f3af98cbf5712aa598e5fbfff0c88a76868257784f5359922402_prof);

        
        $__internal_feca7c88f04ccbab123e3bb7f03bf043ddc9087a675f5b4a71ae9890f1d39f72->leave($__internal_feca7c88f04ccbab123e3bb7f03bf043ddc9087a675f5b4a71ae9890f1d39f72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
