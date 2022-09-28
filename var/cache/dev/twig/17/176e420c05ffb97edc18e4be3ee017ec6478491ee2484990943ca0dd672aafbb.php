<?php

/* @Admin/CtAnomalie/edit.html.twig */
class __TwigTemplate_0ddf5d47c5597c01e5db191e9309fd28703e3bccf0582a6dc47a623c66d7081c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtAnomalie/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3215ac67ff84b171d3b5cab8eb2483cc40c3110302d473e046190e79b7b9fba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3215ac67ff84b171d3b5cab8eb2483cc40c3110302d473e046190e79b7b9fba1->enter($__internal_3215ac67ff84b171d3b5cab8eb2483cc40c3110302d473e046190e79b7b9fba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtAnomalie/edit.html.twig"));

        $__internal_73f4aef11f78921a8c194ffec99996eb86583cc059287ef17c9f37d45a95734f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f4aef11f78921a8c194ffec99996eb86583cc059287ef17c9f37d45a95734f->enter($__internal_73f4aef11f78921a8c194ffec99996eb86583cc059287ef17c9f37d45a95734f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtAnomalie/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3215ac67ff84b171d3b5cab8eb2483cc40c3110302d473e046190e79b7b9fba1->leave($__internal_3215ac67ff84b171d3b5cab8eb2483cc40c3110302d473e046190e79b7b9fba1_prof);

        
        $__internal_73f4aef11f78921a8c194ffec99996eb86583cc059287ef17c9f37d45a95734f->leave($__internal_73f4aef11f78921a8c194ffec99996eb86583cc059287ef17c9f37d45a95734f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7119590f047f7c4aca05e546f574624408718a461074441fa9cea878021ac6fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7119590f047f7c4aca05e546f574624408718a461074441fa9cea878021ac6fe->enter($__internal_7119590f047f7c4aca05e546f574624408718a461074441fa9cea878021ac6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6977f38f18890565806281678915d8fba0da32ca77f5808a4591d64b4804d462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6977f38f18890565806281678915d8fba0da32ca77f5808a4591d64b4804d462->enter($__internal_6977f38f18890565806281678915d8fba0da32ca77f5808a4591d64b4804d462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Anomalie ";
        
        $__internal_6977f38f18890565806281678915d8fba0da32ca77f5808a4591d64b4804d462->leave($__internal_6977f38f18890565806281678915d8fba0da32ca77f5808a4591d64b4804d462_prof);

        
        $__internal_7119590f047f7c4aca05e546f574624408718a461074441fa9cea878021ac6fe->leave($__internal_7119590f047f7c4aca05e546f574624408718a461074441fa9cea878021ac6fe_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_795e90c8697e7671874ebf3245323748c7ab543502240f249947c1e27453eb4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795e90c8697e7671874ebf3245323748c7ab543502240f249947c1e27453eb4b->enter($__internal_795e90c8697e7671874ebf3245323748c7ab543502240f249947c1e27453eb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e48c4eac8b5d9db4ac21d043b0fb5c7cbc68b919d65345ed3eaf1aef1ec4aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e48c4eac8b5d9db4ac21d043b0fb5c7cbc68b919d65345ed3eaf1aef1ec4aec->enter($__internal_7e48c4eac8b5d9db4ac21d043b0fb5c7cbc68b919d65345ed3eaf1aef1ec4aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctAnomalieType", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "anmlLibelle", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "anmlCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_anomalie\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_7e48c4eac8b5d9db4ac21d043b0fb5c7cbc68b919d65345ed3eaf1aef1ec4aec->leave($__internal_7e48c4eac8b5d9db4ac21d043b0fb5c7cbc68b919d65345ed3eaf1aef1ec4aec_prof);

        
        $__internal_795e90c8697e7671874ebf3245323748c7ab543502240f249947c1e27453eb4b->leave($__internal_795e90c8697e7671874ebf3245323748c7ab543502240f249947c1e27453eb4b_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtAnomalie/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  141 => 38,  133 => 33,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Anomalie {% endblock %}

{% set menu_anomalie        = true %}
{% set menu_anomalie_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctAnomalieType) }}
                        {{ form_row(edit_form.anmlLibelle) }}
                        {{ form_row(edit_form.anmlCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_anomalie\"/>
                        <a href=\"{{ path('anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtAnomalie/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtAnomalie\\edit.html.twig");
    }
}
