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
        $__internal_6236680eca1fd2ef649dfd09bb27acb04654e8519ccd71ac9dc5af6302582b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6236680eca1fd2ef649dfd09bb27acb04654e8519ccd71ac9dc5af6302582b70->enter($__internal_6236680eca1fd2ef649dfd09bb27acb04654e8519ccd71ac9dc5af6302582b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtAnomalie/edit.html.twig"));

        $__internal_37b31fb457b3c22b7184c7350faea2aa8a2e52902d2e0e4624e8e0feebdd30e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b31fb457b3c22b7184c7350faea2aa8a2e52902d2e0e4624e8e0feebdd30e4->enter($__internal_37b31fb457b3c22b7184c7350faea2aa8a2e52902d2e0e4624e8e0feebdd30e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtAnomalie/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6236680eca1fd2ef649dfd09bb27acb04654e8519ccd71ac9dc5af6302582b70->leave($__internal_6236680eca1fd2ef649dfd09bb27acb04654e8519ccd71ac9dc5af6302582b70_prof);

        
        $__internal_37b31fb457b3c22b7184c7350faea2aa8a2e52902d2e0e4624e8e0feebdd30e4->leave($__internal_37b31fb457b3c22b7184c7350faea2aa8a2e52902d2e0e4624e8e0feebdd30e4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_08dd70ba0f1d63cea2062473c52ca4440c14420d0508b602842db7c890db3c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08dd70ba0f1d63cea2062473c52ca4440c14420d0508b602842db7c890db3c3d->enter($__internal_08dd70ba0f1d63cea2062473c52ca4440c14420d0508b602842db7c890db3c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec45cfbd24d5dec314623168fe8210ecde4014255b7d17b7939d3f147790cb7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec45cfbd24d5dec314623168fe8210ecde4014255b7d17b7939d3f147790cb7d->enter($__internal_ec45cfbd24d5dec314623168fe8210ecde4014255b7d17b7939d3f147790cb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Anomalie ";
        
        $__internal_ec45cfbd24d5dec314623168fe8210ecde4014255b7d17b7939d3f147790cb7d->leave($__internal_ec45cfbd24d5dec314623168fe8210ecde4014255b7d17b7939d3f147790cb7d_prof);

        
        $__internal_08dd70ba0f1d63cea2062473c52ca4440c14420d0508b602842db7c890db3c3d->leave($__internal_08dd70ba0f1d63cea2062473c52ca4440c14420d0508b602842db7c890db3c3d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0225c8f58ea6982d2271ea31eac8d653cd6b7f02d12c6eb7e80325cd5fb9b244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0225c8f58ea6982d2271ea31eac8d653cd6b7f02d12c6eb7e80325cd5fb9b244->enter($__internal_0225c8f58ea6982d2271ea31eac8d653cd6b7f02d12c6eb7e80325cd5fb9b244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81178424659a89aa2b4c34d7639f2945b6ecbd15546f785deeaa39d5f398ff5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81178424659a89aa2b4c34d7639f2945b6ecbd15546f785deeaa39d5f398ff5f->enter($__internal_81178424659a89aa2b4c34d7639f2945b6ecbd15546f785deeaa39d5f398ff5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_81178424659a89aa2b4c34d7639f2945b6ecbd15546f785deeaa39d5f398ff5f->leave($__internal_81178424659a89aa2b4c34d7639f2945b6ecbd15546f785deeaa39d5f398ff5f_prof);

        
        $__internal_0225c8f58ea6982d2271ea31eac8d653cd6b7f02d12c6eb7e80325cd5fb9b244->leave($__internal_0225c8f58ea6982d2271ea31eac8d653cd6b7f02d12c6eb7e80325cd5fb9b244_prof);

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
