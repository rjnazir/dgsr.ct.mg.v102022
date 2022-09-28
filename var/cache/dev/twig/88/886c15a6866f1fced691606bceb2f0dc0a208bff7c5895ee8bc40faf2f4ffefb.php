<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a89ae0979ddac1d83f3ef8c9b9d2ca88b60b60f7704db4e717ecc0e5e593775b extends Twig_Template
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
        $__internal_c17212cb576d8ecdaa7f08341cca73a8aa869376c4b5958316d0c633a1b17e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17212cb576d8ecdaa7f08341cca73a8aa869376c4b5958316d0c633a1b17e00->enter($__internal_c17212cb576d8ecdaa7f08341cca73a8aa869376c4b5958316d0c633a1b17e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6147710e65acd300ade94293864cf8da3f55bfdfbff0c683e7a527d9cb80d87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6147710e65acd300ade94293864cf8da3f55bfdfbff0c683e7a527d9cb80d87b->enter($__internal_6147710e65acd300ade94293864cf8da3f55bfdfbff0c683e7a527d9cb80d87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c17212cb576d8ecdaa7f08341cca73a8aa869376c4b5958316d0c633a1b17e00->leave($__internal_c17212cb576d8ecdaa7f08341cca73a8aa869376c4b5958316d0c633a1b17e00_prof);

        
        $__internal_6147710e65acd300ade94293864cf8da3f55bfdfbff0c683e7a527d9cb80d87b->leave($__internal_6147710e65acd300ade94293864cf8da3f55bfdfbff0c683e7a527d9cb80d87b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
