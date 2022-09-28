<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_aa3a946d02ea69466ddb9553468471f7bce3566a32b242631d87be1b52ea8087 extends Twig_Template
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
        $__internal_6e9bb2267337a250a7b57d927d8c5270a7bd4305ecda119e4dca885bb0184d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9bb2267337a250a7b57d927d8c5270a7bd4305ecda119e4dca885bb0184d8f->enter($__internal_6e9bb2267337a250a7b57d927d8c5270a7bd4305ecda119e4dca885bb0184d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_449f8c0b1ac345c70be1e2e4491a3eb5b5a475981d023e68f4ea1313b0b5f158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449f8c0b1ac345c70be1e2e4491a3eb5b5a475981d023e68f4ea1313b0b5f158->enter($__internal_449f8c0b1ac345c70be1e2e4491a3eb5b5a475981d023e68f4ea1313b0b5f158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6e9bb2267337a250a7b57d927d8c5270a7bd4305ecda119e4dca885bb0184d8f->leave($__internal_6e9bb2267337a250a7b57d927d8c5270a7bd4305ecda119e4dca885bb0184d8f_prof);

        
        $__internal_449f8c0b1ac345c70be1e2e4491a3eb5b5a475981d023e68f4ea1313b0b5f158->leave($__internal_449f8c0b1ac345c70be1e2e4491a3eb5b5a475981d023e68f4ea1313b0b5f158_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
